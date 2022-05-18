import json
import nltk
nltk.download('punkt')
nltk.download('wordnet')
from nltk.stem import WordNetLemmatizer
import numpy as np
import pickle

lemmatizer = WordNetLemmatizer()

words = []
classes = []
documents = []
ignore_words = ['?', '!']
data_file = open('intents.json', 'r', encoding='utf-8')
intents = json.load(data_file)

# Loop in the intent json in order to create the words list using the tokeinze 

for intent in intents['intents']:
    for pattern in intent['patterns']:

        # The tokenize process breaks down the words, creating a token. Removes certain bits and maybe punctuation.
        word = nltk.word_tokenize(pattern)
        words.extend(word)
        documents.append((word, intent['tag']))

        if intent['tag'] not in classes:
            classes.append(intent['tag'])

# The lemmatization process breaks down the words down to their specific meaning. 
# The text we're inputting needs to be simplified as much as possible in order for the computer to understand it.
words = [lemmatizer.lemmatize(word.lower()) for w in words if w not in ignore_words]
words = sorted(list(set(words)))

classes = sorted(list(set(classes)))
