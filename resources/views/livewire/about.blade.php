<main>
    @if (session()->has('status'))
    <h4 class="ml-72 bg-orange-400 text-center rounded p-4 text-white w-[50%]">  {{ session('status') }}</h4>
       
    @endif

   <form action="/admin/about" method="POST" 
   class="p-2 w-[50%] ml-72 grid grid-rows-3 gap-1"
    enctype="multipart/form-data">
    @csrf
    <label for="">Sub Heading</label>
   
    <input type="text" name="subheading" value="{{ $data[0]->subheading }}"
    class="outline-none p-2">

    
    <label for="" class="text-2xl text-black font-bold"> Heading</label>
    
    <input type="text" name="heading"
    value="{{ $data[0]->heading }}"
      class="outline-none p-2">


      <label for="">Paragraph</label>
      
      
      <textarea name="paragraph" id="" cols="20" rows="5" 
       class="outline-none p-2">{{ $data[0]->paragraph }}</textarea>
    
    <label for="">About Image</label>
    @if ($data[0]->image)
        <img src="{{ url('about/images/' . $data[0]->image) }}" class="w-48 h-48" alt="">
    @endif
    <input type="file" name="image" id="">
    
    <input type="submit" name="add_to_update" value="@if(count($data)>0) Update @else Add @endif"
      class="bg-blue-800 rounded p-2 text-white cursor-pointer mt-2 hover:bg-orange-500">
    
     <input type="hidden" name="id" value="{{ $data[0]->id }}" >
   </form>
</main>
