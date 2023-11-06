<div>
   <h1 class="text-2xl font-bold text-center mb-8">{{$hvac['course']}}</h1>


   @foreach($hvac['classes'] as $hvac)
   <div class="collapse collapse-arrow bg-base-300 mb-2">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-lg ">
         <span class="font-medium">Module {{$hvac['classNumber']}}:</span>
          {{$hvac['title']}}
      </div>
      <div class="collapse-content my-0">
         @foreach($hvac['topics'] as $topic)
         <li>{{$topic}}</li>
         @endforeach
      </div>
   </div>

   @endforeach
</div>