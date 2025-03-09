    <form action="/users" method="POST" enctype="multipart/form-data">
        @csrf
        @error('name')
            <div>{{$message}}</div>
        @enderror
        <input type="text" name="name" id="name" placeholder="Enter your name">
        @error('email')
            <div>{{$message}}</div>
        @enderror
        <input type="text" name="email" id="email" placeholder="Enter your email">
        @error('age')
            <div>{{$message}}</div>
            
        @enderror
        <input type="text" name="age" id="age" placeholder="Enter your age">
        @error('password')
            <div>{{$message}}</div>
            
        @enderror
        <input type="password" name="password" id="password" placeholder="Enter your password">
        @error('password_confirmation')
            <div>{{$message}}</div>
            
        @enderror
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
        @error('file')
            <div>{{$message}}</div>
            
        @enderror
        <input type="file" name="file" id="file" placeholder="Upload your file">
        @error('url')
            <div>{{$message}}</div>
            
        @enderror
        <input type="text" name="url" id="url" placeholder="Enter your url">
        <button type="submit">Submit</button>
    </form>
