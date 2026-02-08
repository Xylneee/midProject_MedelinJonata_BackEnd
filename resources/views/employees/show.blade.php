@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Employee Details</h1>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label"><strong>Name:</strong></label>
                        <p>{{ $employee->name }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Email:</strong></label>
                        <p>{{ $employee->email }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Position:</strong></label>
                        <p>{{ $employee->position }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Salary:</strong></label>
                        <p>${{ number_format($employee->salary, 2) }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Created At:</strong></label>
                        <p>{{ $employee->created_at->format('Y-m-d H:i:s') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Updated At:</strong></label>
                        <p>{{ $employee->updated_at->format('Y-m-d H:i:s') }}</p>
                    </div>

                    <div>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
