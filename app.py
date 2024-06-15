from flask import Flask, request, render_template, url_for, redirect, flash
from flask_mysqldb import MySQL

app = Flask(__name__)
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'bd_medico'
app.secret_key = 'mysecretkey'
mysql = MySQL(app)

@app.route('/')
def index():
    return render_template('home.html')

@app.route('/puntosRecoleccion')
def puntosRecoleccion():
    return render_template('puntosRecoleccion.html')

@app.route('/misRecolecciones')
def misRecolecciones():
    return render_template('misRecolecciones.html')

@app.route('/listaEmpresas')
def listaEmpresas():
    return render_template('listaEmpresas.html')

@app.route('/listaUsuarios')
def listaUsuarios():
    return render_template('listaUsuarios.html')

if __name__ == '__main__':
    app.run(port=3000, debug=True) 