<div>
   <h1 class="text-2xl font-bold text-center mb-8">{{$basicAutoCAD['course']}}</h1>


   @foreach($basicAutoCAD['classes'] as $basicAutoCAD)
   <div class="collapse collapse-arrow bg-base-300 mb-2">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-lg ">
         <span class="font-medium">Module {{$basicAutoCAD['classNumber']}}:</span>
          {{$basicAutoCAD['title']}}
      </div>
      <div class="collapse-content my-0">
         @foreach($basicAutoCAD['topics'] as $topic)
         <li>{{$topic}}</li>
         @endforeach
      </div>
   </div>

   @endforeach
</div>