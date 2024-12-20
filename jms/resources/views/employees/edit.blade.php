<!-- resources/views/employees/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>

<body>
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $employee->name }}" required>
        <br>

        <label for="position">Position:</label>
        <input type="text" name="position" id="position" value="{{ $employee->position }}" required>
        <br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" value="{{ $employee->salary->salary }}" step="0.01"
            required>
        <br>

        <button type="submit">Update Employee</button>
    </form>
</body>

</html>
