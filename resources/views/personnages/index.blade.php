<x-slot name="heading">
    Personnages Star Wars
</x-slot>
<h1>Hello from the Jobs page.</h1>
<section class="space-y-4">
    @foreach($personnages as $personnage)
        <a href="/personnages/{{$personnage['id']}}">
            <section>
                {{ $personnage->nom}}
            </section>
        </a>
    @endforeach
</section>
