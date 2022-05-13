<x-default-email-layout>

    <x-slot name="title">
        {{ $subject }}
    </x-slot>
    <x-slot name="url">{{ $url }}</x-slot>
    <x-slot name="button_title">
        {{ $action }}
    </x-slot>
    <p>Dear {{ getFirstName($name) }},</p>
    <p>
        {{ $message }}
    </p>
    <p>Best Regards,</p>

    <p> The YensoftGH Team <br />
        www.yensoftgh.com
    <p>

</x-default-email-layout>
