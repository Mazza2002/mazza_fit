<x-layouts>


    <x-flash-message/>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
               list  Modify
            </h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form action="/listings/{!!$listing->id!!}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" value="{!! $listing->company!!}"/>
                @error('title')
                    <div class="text-red-300">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Example: Senior Laravel Developer" value="{!!$listing->title!!}" />
                @error('title')
                    <div class="text-red-300">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc"  value="{!!$listing->location!!}"/>
                @error('location')
                    <div class="text-red-300">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"  value="{{$listing->email}}"/>
                @error('email')
                    <div class="text-red-300">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{$listing->website}}" />
                @error('website')
                    <div class="text-red-300">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc"  value="{{$listing->tags}}"/>
                @error('tags')
                    <div class="text-red-300">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                <img src="{{($listing->logo)?asset('/storage/'.$listing->logo):asset('/images/no-image.png')}}" alt="" class="w-32">	
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc" >{!!$listing->description!!}</textarea>

                @error('description')
                    <div class="text-red-300">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update Gig
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>




</x-layouts>
