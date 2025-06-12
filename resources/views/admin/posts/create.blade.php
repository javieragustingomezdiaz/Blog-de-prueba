<x-layouts.app>
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{route('dashboard')}}">
            Dashboard
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.posts.index')">
            Posts
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item>
            Nuevo
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>


    <div class="card">
        <form action="{{route('admin.posts.store')}}" method="POST" class="space-y-4">
            
            @csrf
            <flux:input label="Título" name="title" value="{{old('title')}}" placeholder="Escribe el título del post"/>

            <flux:input label="Slug" name="slug" value="{{old('slug')}}" placeholder="Escribe el slug del post"/>
            
            <flux:select label="Categoría" name="category_id">
                @foreach ($categories as $category)
                    <flux:select.option value="{{$category->id}}">
                        {{$category->name}}
                    </flux:select.option>
                @endforeach
            </flux:select>
           
            <div class="flex justify-end">
                <flux:button variant="primary" type="submit">
                    Enviar
                </flux:button>
            </div>
        

        </form>
    </div>
</x-layouts.app>