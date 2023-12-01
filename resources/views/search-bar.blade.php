<div class="container mb-5">
    <form action="{{ route('products.list') }}" method="get" role="search">
        <div class="columns">
            <div class="column is-narrow">
                <label>
                    <input type="text" class="input is-success" name="search" placeholder="Search Products"/>
                </label>
            </div>
            <div class="column is-narrow">
                <button type="submit" class="button is-success">Look For</button>
            </div>
        </div>
    </form>
</div>

