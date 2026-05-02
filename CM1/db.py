import mysql.connector
from mysql.connector import Error
from config import DB_CONFIG

def get_connection():
    """ crée et retourn une nouvelle connexion MySQL.
    Léve ue excepton si la connexion echoue"""
    try:
        connection = mysql.connector.connect(**DB_CONFIG)
        return connection
    except Error as e:
        print(f"Erreur connexion MySQL : {e}")
        raise