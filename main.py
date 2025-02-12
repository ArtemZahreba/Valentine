from flask import Flask, render_template, request
import json

app = Flask(__name__)

# Завантажуємо тексти валентинок з JSON файлу
def load_valentines():
    with open('valentines.json', 'r', encoding='utf-8') as file:
        valentines = json.load(file)
    return valentines

@app.route('/', methods=['GET', 'POST'])
def home():
    show_valentines = False
    if request.method == 'POST':
        show_valentines = True

    valentines = load_valentines()

    return render_template('index.html', show_valentines=show_valentines, valentines=valentines)

if __name__ == '__main__':
    app.run(debug=True)
