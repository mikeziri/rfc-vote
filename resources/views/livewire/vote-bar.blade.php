<div class="flex shadow-xl font-bold rounded-full overflow-hidden">
    <div
        class="
                p-4 flex-grow text-left hover:bg-green-600 hover:text-white cursor-pointer
                min-w-[15%]
                @if($user?->getVoteForRfc($rfc)?->type === \App\Models\VoteType::YES)
                bg-green-600 text-white
                @else
                bg-green-300 text-green-900
                @endif
            "
        style="width: {{ $rfc->percentage_yes }}%;"
        @if($user?->getVoteForRfc($rfc)?->type === \App\Models\VoteType::YES)
            wire:click="undo()"
        @else
            wire:click="vote('{{ \App\Models\VoteType::YES }}')"
        @endif
    >
        {{ $rfc->percentage_yes }}%
    </div>
    <div
        class="
                p-4 flex-grow text-right hover:bg-red-600 hover:text-white cursor-pointer
                min-w-[15%]

                @if($user?->getVoteForRfc($rfc)?->type === \App\Models\VoteType::NO)
                bg-red-600 text-white
                @else
                bg-red-300 text-red-900
                @endif
            "
        style="width: {{ $rfc->percentage_no }}%;"
        @if($user?->getVoteForRfc($rfc)?->type === \App\Models\VoteType::NO)
            wire:click="undo()"
        @else
            wire:click="vote('{{ \App\Models\VoteType::NO }}')"
        @endif >
        {{ $rfc->percentage_no }}%
    </div>
</div>
