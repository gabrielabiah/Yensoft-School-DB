<x-default-email-layout>

    <x-slot name="title">
        Complete Your Account Setup
    </x-slot>
    <x-slot name="url">{{ config('app.url') . '/login' }}</x-slot>
    <x-slot name="button_title">
        Complete Account Setup
    </x-slot>
    <p>Dear {{ getFirstName($name) }},</p>
    <p>
        Thank you for signing up. Your account setup process is incomplete. Click "Complete Account Setup" below to
        complete
        setting up your account.
    </p>
    <p>Best Regards,</p>

    <p> The YensoftGH Team <br />
        www.yensoftgh.com
    <p>

</x-default-email-layout>
