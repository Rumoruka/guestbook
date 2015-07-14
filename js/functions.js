//функція для відправки даних у БД
function senddata() {
	$.ajax({
	type: 'POST',
	url: "serverside.php", //використовуємо файл serverside.php
	data: { //передаємо дані, введені користувачем, використовуючи id полів
		name: $('#name').val() 
		,email:$('#email').val()
		,response:$('#response').val()
		,comment:$('#comment').val()	},
	success: function(data){$('#resp').html(data)} //виводимо текст у блоці id='resp'
	}
)}
