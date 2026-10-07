<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>

    <h1>Create Course</h1>

    @if($errors->any())
        <h3>Please fix the following errors:</h3>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/course" method="POST">

        @csrf

        <div>
            <label>Name</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <br>

        <div>
            <label>Description</label>

            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <br>

        <div>
            <label>Duration (weeks)</label>

            <input
                type="number"
                name="duration"
                value="{{ old('duration') }}"
            >
        </div>

        <br>

        <div>
            <label>Fee</label>

            <input
                type="number"
                step="0.01"
                name="fee"
                value="{{ old('fee') }}"
            >
        </div>

        <br>

        <div>
            <label>Difficulty</label>

            <select name="difficulty">
                <option value="">Select Difficulty</option>

                <option value="Easy"
                    {{ old('difficulty') == 'Easy' ? 'selected' : '' }}>
                    Easy
                </option>

                <option value="Medium"
                    {{ old('difficulty') == 'Medium' ? 'selected' : '' }}>
                    Medium
                </option>

                <option value="Hard"
                    {{ old('difficulty') == 'Hard' ? 'selected' : '' }}>
                    Hard
                </option>
            </select>
        </div>

        <br>

        <div>
            <label>Active</label>

            <select name="is_active">
                <option value="1"
                    {{ old('is_active') == '1' ? 'selected' : '' }}>
                    Yes
                </option>

                <option value="0"
                    {{ old('is_active') == '0' ? 'selected' : '' }}>
                    No
                </option>
            </select>
        </div>

        <br>

        <button type="submit">
            Create Course
        </button>

    </form>

    <br>

    <a href="/courses">
        Back to Courses
    </a>

</body>
</html>