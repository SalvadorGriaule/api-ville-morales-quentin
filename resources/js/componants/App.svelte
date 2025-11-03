<script lang="ts">
    let inputSearch:string = $state("")
    let select:string = $state("")
    let result:any = $state([])

    const onclick= async () => {
        if(inputSearch){
            let path = "";
            switch(select){
                case "ville":
                    path = "/" + inputSearch;
                break;
                case "departement":
                    path = "/dep/" + inputSearch;
                break;
                case "code":
                    path = "/code/" + inputSearch;
            }
            let resp = await ( await fetch("http://127.0.0.1:8000/villes")).json()
            result = await JSON.parse(resp)
        }

    }
</script>

<div class="flex flex-col justify-center items-center">
    <h1>ApiSearch</h1>
    <div class="flex ">
        <input bind:value={inputSearch} type="text" placeholder="Recherche" class="border p-1 placeholder:text-gray-400 placeholder:italic">
        <select bind:value={select} name="opt" id="">
            <option value="ville">ville</option>
            <option value="departement">departement</option>
            <option value="code">code Postal</option>
        </select>
        <button onclick={() => onclick}  class="p-2 bg-slate-300">Go</button>
    </div>
    {#if result.length > 0 && inputSearch.length > 0}
        {#each result as elem }
            <p>{elem}</p>
        {/each}
    {:else if result.length > 0}
        <p>pas de resultat</p>
    {/if}
</div>