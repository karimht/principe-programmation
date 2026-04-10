#1. On utilise une image Python officielle
FROM python:3.12-slim

#2. On définit le répertoire de travail
WORKDIR /app

#3. On installe Flask
RUN pip install flask

#4. On copie le fichier app.py dans l'image
COPY app.py

#5. On documente le port utilisé
EXPOSE 5000

#6. On définit la commande qui démare l'application
CMD["python","app.py"]