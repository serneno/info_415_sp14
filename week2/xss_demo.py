from flask import Flask, request, make_response, render_template
app = Flask(__name__)

html_page = """

<html>
    <head>
    </head>

    <body>
    </body>
</html>
"""

@app.route('/login.html', methods=["GET","POST"])
def index():
    if request.method == "POST":
        username = request.form["username"]
        language = "english"
        resp = make_response(render_template("simple.html", username=username, language=language, error=True))
    else:
        language = request.args.get("lang")
        resp = make_response(render_template("simple.html", username="", language=language, error=False))
    return resp

if __name__ == '__main__':
    app.run(debug=True)

