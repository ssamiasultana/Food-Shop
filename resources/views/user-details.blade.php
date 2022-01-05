<!DOCTYPE html>
<html>
<head>
	<title></title>



	<style type="text/css">
		.abc button{
			width: 350px;
			font-size: 20px;
		}
	</style>
    <body>
	<div align="center" class="bg-dark text-light pt-4 pb-4">
		<a href="/admin-view"><button style="float: left;" class="btn btn-success ml-3"><< BACK</button></a>
		<h1>ORDER DETAIL</h1>	
	</div>

	<table align="center" border="1" width="90%" style="margin-top: 20px;" class="mb-5">
		<tr style="background-color: black; color: white;" align="center">
			<th width="100"> Id</th>
			<th width="150">Name</th>
			<th width="150">Email</th>
			<th width="150">Is Admin</th>
			
		</tr>
					<tr align="center">
                    @foreach($users as $user)
						<td>  {{$user->id}}</td>
						<td> {{$user->name}} </td>
						<td> {{user->email}}</td>
						<td>{{$user->is_admin}} </td>
                        @endforeach
						
					</tr>
					
    </table>

	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
</html>
</head>