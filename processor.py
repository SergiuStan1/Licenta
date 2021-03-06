import datetime
import os
import nltk
from nltk.stem import WordNetLemmatizer
lemmatizer = WordNetLemmatizer()
import pickle
import numpy as np

from keras.models import load_model
model = load_model('chatbot_model.h5')
import json
import random
intents = json.loads(open('bot_intents.json', encoding='utf-8').read())
words = pickle.load(open('words.pkl','rb'))
classes = pickle.load(open('classes.pkl','rb'))


def clean_up_sentence(sentence):
    sentence_words = nltk.word_tokenize(sentence)
    sentence_words = [lemmatizer.lemmatize(word.lower()) for word in sentence_words]
    return sentence_words

# return bag of words array: 0 or 1 for each word in the bag that exists in the sentence

def bow(sentence, words, show_details=True):
    # tokenize the pattern
    sentence_words = clean_up_sentence(sentence)
    # bag of words - matrix of N words, vocabulary matrix
    bag = [0]*len(words)
    for s in sentence_words:
        for i,w in enumerate(words):
            if w == s:
                # assign 1 if current word is in the vocabulary position
                bag[i] = 1
                if show_details:
                    print ("found in bag: %s" % w)
    return(np.array(bag))

def predict_class(sentence, model):
    # filter out predictions below a threshold
    p = bow(sentence, words, show_details=False)
    res = model.predict(np.array([p]))[0]
    ERROR_THRESHOLD = 0.25
    results = [[i,r] for i,r in enumerate(res) if r>ERROR_THRESHOLD]
    # sort by strength of probability
    results.sort(key=lambda x: x[1], reverse=True)
    return_list = []
    for r in results:
        return_list.append({"intent": classes[r[0]], "probability": str(r[1])})
    return return_list

def getResponse(ints, intents_json):
    tag = ints[0]['intent']
    list_of_intents = intents_json['intents']
    for i in list_of_intents:
        if(i['tag']== tag):
            result = random.choice(i['responses'])
            break
        else:
            result = "You must ask the right questions"
    return result

def chatbot_response(msg):
    ints = predict_class(msg, model)
    res = getResponse(ints, intents)

    # Every time the function is called a new json file is generated in the responses folder with the name response+datetime.json and it will store the msg and the response with the date and time
    with open('responses/response'+datetime.datetime.now().strftime("%Y-%m-%d-%H-%M-%S")+'.json', 'w') as outfile:
        now = datetime.datetime.now()
        time = now.strftime("%Y-%m-%d %H:%M:%S")
        date = now.strftime("%Y-%m-%d")
        tag = ints[0]['intent']
        response = {
            "Message": {
                "IntentType": tag,
                "Date": date,
                "Time": time,
                "Message": msg,
                "Response": res
            }
        }
        json.dump(response, outfile)

    # store the msg and res in response.json as an object named Message with a key of the current date and time on a new line every time
    # now = datetime.datetime.now()
    # date = now.strftime("%d-%m-%Y")
    # time = now.strftime("%H:%M:%S")
    # response = {
    #     # json structure with an object named Message with a key of the current date and time on a new line every time
    #     "Message": {
    #         "Date": date,
    #         "Time": time,
    #         "Message": msg,
    #         "Response": res
    #     }
    # }
    # with open('response.json', 'a') as outfile:
    #     # if there is no content in the file don't start a new line 
    #     if os.stat('response.json').st_size == 0:
    #         json.dump(response, outfile)
    #     else:
    #         outfile.write('\n')
    #         json.dump(response, outfile)
    
    return res