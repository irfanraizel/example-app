@extends('layouts.main')

@section('container')
    <h1 class="text-center">Contact Us</h1>
    <div class="d-flex justify-content-center">
        <div>
            <p>Phone Number : {{ $detail['phone'] }}</p>
            <p>WhatsApp : {{ $detail['whatsapp'] }}</p>
            <p>Email : {{ $detail['email'] }}</p>
            <p>Instagram : {{ $detail['instagram'] }}</p>
            <p>Address : {{ $detail['address'] }}</p>
        </div>
    </div>
@endsection

Category::create([
    'name' => 'Web Design',
    'excerpt' => 'Ini Adalah excerpt post keempat',
    'slug' => 'judul-keempat',
    'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias fugiat alias fuga ab sint dolores eligendi, iusto voluptates quo sequi culpa veniam voluptatem pariatur beatae iure, quibusdam temporibus expedita, odio deserunt? Praesentium eum sequi dolorum animi saepe unde cupiditate magni,</p><p> voluptates, ab voluptas voluptatum ea nihil cum? Ullam animi veritatis nulla voluptatibus fuga quasi adipisci velit consequuntur nobis qui hic, enim, blanditiis odit voluptatum harum deleniti temporibus praesentium iure accusantium porro distinctio! Consequuntur, nemo a exercitationem minus accusantium veritatis non temporibus quasi, veniam quas atque accusamus,</p><p> doloremque repudiandae? Reprehenderit iste nemo quae doloribus nihil dolores sunt eius odio adipisci voluptate perferendis iure aliquam corrupti, rem aliquid blanditiis dolore dicta alias consequuntur dignissimos aut beatae perspiciatis? Fugit minus magnam accusantium reprehenderit velit unde doloremque exercitationem dolore expedita ab! Debitis, nisi illo. Error ex aperiam pariatur recusandae eos culpa molestias quibusdam iure.</p>'
])

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias fugiat alias fuga ab sint dolores eligendi, iusto voluptates quo sequi culpa veniam voluptatem pariatur beatae iure, quibusdam temporibus expedita, odio deserunt? Praesentium eum sequi dolorum animi saepe unde cupiditate magni,</p><p> voluptates, ab voluptas voluptatum ea nihil cum? Ullam animi veritatis nulla voluptatibus fuga quasi adipisci velit consequuntur nobis qui hic, enim, blanditiis odit voluptatum harum deleniti temporibus praesentium iure accusantium porro distinctio! Consequuntur, nemo a exercitationem minus accusantium veritatis non temporibus quasi, veniam quas atque accusamus,</p><p> doloremque repudiandae? Reprehenderit iste nemo quae doloribus nihil dolores sunt eius odio adipisci voluptate perferendis iure aliquam corrupti, rem aliquid blanditiis dolore dicta alias consequuntur dignissimos aut beatae perspiciatis? Fugit minus magnam accusantium reprehenderit velit unde doloremque exercitationem dolore expedita ab! Debitis, nisi illo. Error ex aperiam pariatur recusandae eos culpa molestias quibusdam iure.</p>