<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
</head>
<body>
    <h1>Add Category</h1>
    <form method="POST" action="{{ route('category.store') }}" class="p-3">
        @csrf

        <!-- Name -->
        <div class="p-2">
            <label for="name">Category Name:</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus />
        </div>

        <div class="block">
            <button type="submit">Create</button>
        </div>

    </form>
</body>
</html>



