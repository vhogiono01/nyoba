<!DOCTYPE html>
<html>
<head>
	<title>ToDo List</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>ToDo List</h1>
				<ol>
					@foreach($todo as $td)
				
					<li>{{ $td->item }}
						<a href="{{ route('todo.edit', $td->id_todo) }}" class="btn btn-xs btn-warning">edit</a>
						<form action="{{ url('todo/delete', $td->id_todo) }}" method="POST">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							
							<button type="submit" class="btn btn-xs btn-danger">
		                    	<i class="fa fa-trash"></i> Delete
		                    </button>	
	                    </form>
					</li>
					@endforeach
				</ol>
				

				@if(isset($todo_edit))
				<form action="{{ route('todo.update') }}" method="POST">
				<input type="hidden" name="id_todo" value="{{ $todo_edit->id_todo }}">
				@else
				<form action="todo" method="POST">
				@endif
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-3">
							<div class="form-group">
								<input type="text" class="form-control" name="todo_item" placeholder="Item baru..." @if(isset($todo_edit)) value="{{ $todo_edit->item }}" @endif>
							</div>
						</div>

				
						<div class="col-lg-1">
						@if(isset($todo_edit))
							<button type="submit" class="btn btn-success">Update</button>
						@else
							<button type="submit" class="btn btn-success">Add</button>
						@endif
						</div>
						<div class="col-lg-8">
						</div>
					</div>
				</form>
				
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</div>
		</div>
	</div>
</body>
</html>