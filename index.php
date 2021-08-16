<!DOCTYPE html>
<html lang="en"> 
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Fetch API Sandbox</title>
	</head>
	<body>
		<form id="addPost">
			<div class="form-group">
				<input type="text" id="title" class="form-control" placeholder="Title" />
			</div>
			<div class="form-group">
				<textarea id="body" class="form-control" placeholder="Body"></textarea>
			</div>
			<input type="submit" class="btn btn-secondary" value="Submit" />
		</form>

		<script>
			document.getElementById('addPost').addEventListener('submit', addPost);

			function addPost(e){
				e.preventDefault();

				let title = document.getElementById('title').value;
				let body = document.getElementById('body').value;

				fetch('https://jsonplaceholder.typicode.com/posts', {
					method: 'POST',
					headers: {
						'Accept': 'application/json, text/plain, */*',
						'Content-Type': 'application/json'
					},
					body:JSON.stringify({title:title, body:body})
				})	
					.then((res) => res.json())
					.then((data) => console.log(data))			

			}
		</script>
	</body>
</html>
