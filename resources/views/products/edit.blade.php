<x-layout>
    <h1>Edit product</h1>

    <x-errors />

    <form method="POST" action="">
       
        <x-products.form 
            :types="$types" 
            :materials="$materials" 
            :models="$models" 
            :product="$product" 
        />  

    </form>
    
</x-layout>