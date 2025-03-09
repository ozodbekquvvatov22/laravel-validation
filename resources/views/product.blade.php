<form action="/products" method="POST">
    @csrf
    @error('name')
        <div>{{$message}}</div>
        @enderror
    <input type="text" name="name" id="name" placeholder="Enter your name">
    @error('price')
        <div>{{$message}}</div>
        @enderror

    <input type="text" name="price" id="price" placeholder="Enter the price">
    @error('date')
        <div>{{$message}}</div>
        @enderror
    <input type="date" name="date" id="date" placeholder="Enter the date">
    
    <button type="submit">Submit</button>
</form>