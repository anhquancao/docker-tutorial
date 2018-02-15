FROM python
WORKDIR app
COPY requirement.txt .
RUN pip install -r requirement.txt
EXPOSE 80
CMD [ "python", "app.py" ]