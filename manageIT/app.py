from cmath import log
import os
import sqlite3
from flask import Flask, render_template, jsonify, request
import flask_login
import processor
import db


app = Flask(__name__)

app.config['SECRET_KEY'] = 'qqwwee'

db.create_db('db.db')

def check_login(username, password):
    conn = sqlite3.connect('db.db')
    c = conn.cursor()
    c.execute("SELECT * FROM users WHERE username=? AND password=?", (username, password))
    data = c.fetchone()
    conn.close()
    if data is None:
        # show error message if the data is incorrect
        print('incorrect data')
        return False
    else:
        return True

@app.route('/', methods=["GET", "POST"])
def login():
    if request.method == "POST":
        username = request.form['username']
        password = request.form['password']
        if check_login(username, password):
            # login success
            return render_template('index.html')
        else:
            # login failed
            return render_template('login.html')
    return render_template('login.html')


if __name__ == '__main__':
    app.run(host='0.0.0.0', port='8000', debug=True)
