//������� ��� �������� ����� � ��
function senddata() {
	$.ajax({
	type: 'POST',
	url: "serverside.php", //������������� ���� serverside.php
	data: { //�������� ���, ������ ������������, �������������� id ����
		name: $('#name').val() 
		,email:$('#email').val()
		,response:$('#response').val()
		,comment:$('#comment').val()	},
	success: function(data){$('#resp').html(data)} //�������� ����� � ����� id='resp'
	}
)}
