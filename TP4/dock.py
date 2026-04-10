# 1. Image Python officielle
FROM python:3.12-slim

# 2. Répertoire de travail
WORKDIR /app

# 3. Installation de Flask
RUN pip install flask

# 4. Copier le fichier app.py
COPY app.py .

# 5. Exposer le port
EXPOSE 5000

# 6. Lancer l'application
CMD ["python", "app.py"]