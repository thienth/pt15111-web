<?php 
$script = "
	<script>
	var url = 'https://reqres.in/api/users?page=2';
	fetch(url)
		.then(function(response){
			return response.json();	
		})
		.then(function(data){
			console.log('danh sach user:');
			console.log(data);
		})

	</script>
";

echo htmlentities($script);


 ?>