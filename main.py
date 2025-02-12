from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def home():
    if request.method == 'POST' and 'show_valentines' in request.form:
        # Показуємо валентинки
        return render_template('index.html', show_valentines=True)
    return render_template('index.html', show_valentines=False)

if __name__ == '__main__':
    app.run(debug=True)
