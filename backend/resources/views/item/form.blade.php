<form action="/item/store" method="post" enctype="multipart/form-data">
 @csrf
 <input class="" name="title" value="{{ old('title') }}">
 <textarea class="" name="content" cols="50" rows="10">{{ old('content') }}</textarea>  
 <input type="file" name="image" accept="image/png, image/jpeg">
 <input type="submit" value="投稿"> 
 </form>