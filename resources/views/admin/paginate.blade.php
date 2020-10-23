

<span class=" m-r"><strong></strong>{!! $result->links() !!}</span>
<div class="well m-b-none pagination-part" style="background-color: #DDDDDD; color:black">



 
    <span class="m-r"><strong>Total {!! $type !!}: </strong>{!! $result->total() !!}</span>
    <span class="m-r"><strong>Current Page</strong>
        @if ($result->currentPage() == $result->lastPage())
            {!! $result->total() - $result->perPage()*($result->currentPage()-1)  !!}
        @else
            {{$result->perPage()}}
        @endif
    </span>
    <span class="m-r"><strong>This Page</strong>{!! $result->currentPage() !!}</span>
    <span class="m-r"><strong>Total page</strong>{!! $result->lastPage() !!} </span>
   
</div>