function sendEmail() {
	Email.send({
		Host: "smtp.gmail.com",
		Username: "softworldwebsite@gmail.com",
		Password: "p@55WorD",
		To: 'saqib@softworld.com.pk',
		From: "softworldwebsite@gmail.com",
		Subject: "test",
		Body: "test",
	}).then(
		message => alert("mail sent successfully")
	);
}