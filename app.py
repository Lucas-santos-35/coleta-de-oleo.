from flask import Flask, request, jsonify
from flask_mail import Mail, Message

app = Flask(__name__)

# Configurações do servidor de e-mail
app.config['MAIL_SERVER'] = 'smtp.mailtrap.io'
app.config['MAIL_PORT'] = 587
app.config['MAIL_USERNAME'] = 'seu_usuario'
app.config['MAIL_PASSWORD'] = 'sua_senha'
app.config['MAIL_USE_TLS'] = True
app.config['MAIL_USE_SSL'] = False

mail = Mail(app)

@app.route('/enviar-email', methods=['POST'])
def enviar_email():
    data = request.get_json()
    report_data = data.get('reportData')

    # Criação do conteúdo do e-mail
    subject = "Relatório de Óleo"
    sender = "seu_email@exemplo.com"
    recipients = ["destinatario@exemplo.com"]
    body = "Aqui está o relatório:\n\n" + str(report_data)

    msg = Message(subject, sender=sender, recipients=recipients)
    msg.body = body

    try:
        mail.send(msg)
        return jsonify({"message": "E-mail enviado com sucesso!"}), 200
    except Exception as e:
        return jsonify({"message": "Erro ao enviar e-mail", "error": str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True)
