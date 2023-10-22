@extends('autocad')
@section('autocad')
<div>

   <h1 class="text-5xl font-bold text-center">Advanced AutoCAD 2D</h1>

   <div class="collapse collapse-arrow bg-base-200 mt-10">
      <input type="radio" name="my-accordion-2" checked="checked" />
      <div class="collapse-title text-xl font-medium">
         Module 1: Introductions to AutoCAD
      </div>
      <div class="collapse-content">
         <li>Introduction to AutoCAD Interface</li>
         <li>Learning basic navigation and commands</li>
         <li>Create a new drawing and save it</li>
         <li>AutoCAD file formate: dxf, dwg, bak file details</li>
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 2: Basic Drawing Tools
      </div>
      <div class="collapse-content">
         <li>Line Plyline, Circle, Arc, Rectangle and Ellipse</li>
         <li>Move, Copy, Rotate, Scale, Mirror, Offset and Trim</li>
         <li>Array, Scale, Stretch, Group</li>
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 3: Object Snap and Coordinate system
      </div>
      <div class="collapse-content">
         <li>Learn about object snap and how to use it effectively</li>
         <li>Introduction to object snaps: Endpoint, Midpoint, Center, Quadrant ect</li>
         <li>Unite setup, Limits setup, Dimension style manager setup</li>

      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 4: Layers and Properties
      </div>
      <div class="collapse-content">
         <li>Understanding the concept of layers and thier properties</li>
         <li>Creating and managing layers, assigning properties to object</li>


      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 5: Annotation and Text
      </div>
      <div class="collapse-content">
         <li>Adding text to drawing: Single-line text, Multiline Text</li>
         <li>Understading text styles and formatting options</li>
         <li>Creating Multileaders and callouts</li>


      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 6: Dimensioning
      </div>
      <div class="collapse-content">
         <li>Creating dimensions: Liner, Aligned, Angular, redial, Diametter etc</li>
         <li>Setting dimentions styles, modifying dimensions
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 7: Block
      </div>
      <div class="collapse-content">
         <li>Creating and inserting blocks</li>
         <li>Creating dynamic blocks with different c0onfigurations and actions</li>
         <li>Learning how to use block attributes to add information to blocks</li>
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 8: References
      </div>
      <div class="collapse-content">
         <li>Creating and reference</li>
         <li>Using the Xref manager to manage extternal reference</li>
         <li>Using exernal references to link and collaborate with other drawing</li>
         <li>Understading the concept of Xrefs and their benefits</li>

      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 9: Hatching and Gradients
      </div>
      <div class="collapse-content">
         <li>Creating hatch patterns and gradients to fill objects</li>
         <li>Editing and managing hatch and gradient paterns</li>
         <li>Extra hatch add system</li>
         
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 10: Isometric Drawing
      </div>
      <div class="collapse-content">
         <li>Understanding isometric projection and isometric drawing tools</li>
         <li>Creating Isometric views fo 2d drawings</li>
         
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 11: Tables and Fields
      </div>
      <div class="collapse-content">
         <li>creating tables to organized and present data</li>
         <li>Adding fields to tables to automatically update informations</li>
        
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 12: Drawing Management
      </div>
      <div class="collapse-content">
         <li>Learning how to manage and organize drawing file</li>
         <li>Understanding the importance fo backup and revovery</li>
         

      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 13: AAdvanced layouts (Title box)
      </div>
      <div class="collapse-content">
         <li>Creating and managing multiple layouts in a drawing</li>
         <li>Adding title blocks, borders and annotations to layouts</li>
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 14: Plotting and Printing
      </div>
      <div class="collapse-content">
         <li>Understanding th3e printing process and printer settings</li>
         <li>Configuring page setups and plotting drawings</li>

         <li>Export PDF and Apps</li>
         
      </div>
   </div>
   <div class="collapse collapse-arrow bg-base-200 my-5">
      <input type="radio" name="my-accordion-2" />
      <div class="collapse-title text-xl font-medium">
         Module 15: Adcance AutoCAD setting (Customize)
      </div>
      <div class="collapse-content">
         <li>AutoCAD problem and reset</li>
         <li>Shortcut Command add</li>
         <li>Option details</li>
         
      </div>
   </div>


</div>

@endsection