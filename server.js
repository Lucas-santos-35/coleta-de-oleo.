const express = require("express");
const nodemailer = require("nodemailer");
const bodyParser = require("body-parser");

const app = express();
app.use(bodyParser.json());

app.post("/send-email", async (req, res) => {
  const { email, subject, text } = req.body;

  // Configuração do transporte de email
  let transporter = nodemailer.createTransport({
    service: "gmail",
    auth: {
      user: "seu-email@gmail.com",
      pass: "sua-senha",
    },
  });

  // Opções do email
  let mailOptions = {
    from: "seu-email@gmail.com",
    to: email,
    subject: subject,
    text: text,
  };

  try {
    await transporter.sendMail(mailOptions);
    res.status(200).send("Email enviado com sucesso!");
  } catch (error) {
    res.status(500).send("Erro ao enviar email: " + error.message);
  }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Servidor rodando na porta ${PORT}`);
});
