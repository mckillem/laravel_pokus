import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import {Head, useForm} from '@inertiajs/react';
import {FormEventHandler} from "react";
import {Label} from "@/components/ui/label";
import {Input} from "@/components/ui/input";
import InputError from "@/components/input-error";
import {Button} from "@/components/ui/button";

type ContactForm = {
    firstname: string;
    lastname: string;
    message: string;
};

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Contact',
        href: '/contact',
    },
];

export default function Contact() {
    const { data, setData, post, processing, errors, reset } = useForm<Required<ContactForm>>({
        password: '',
        password_confirmation: '',
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('contact'), {
            // onFinish: () => reset('password', 'password_confirmation'),
        });
    };
    return (
        <>
            <form className="flex flex-col gap-6" onSubmit={submit}>
                <div className="grid gap-6">
                    <div className="grid gap-2">
                        <Label htmlFor="firstname">Jméno</Label>
                        <Input
                            id="firstname"
                            type="text"
                            name="firstname"
                            value={data.firstname}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('firstname', e.target.value)}
                        />
                        <InputError message={errors.firstname} className="mt-2" />
                    </div>

                    <div className="grid gap-2">
                        <Label htmlFor="lastname">Příjmení</Label>
                        <Input
                            id="lastname"
                            type="text"
                            name="lastname"
                            value={data.lastname}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('lastname', e.target.value)}
                        />
                        <InputError message={errors.lastname} className="mt-2" />
                    </div>

                    <div className="grid gap-2">
                        <Label htmlFor="message">Poznámka</Label>
                        <Input
                            id="message"
                            type="text"
                            name="message"
                            value={data.message}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('message', e.target.value)}
                        />
                        <InputError message={errors.message} className="mt-2" />
                    </div>
                    <Button type="submit" className="mt-4 w-full">
                        Odeslat
                    </Button>
                </div>
            </form>
        </>
        // <AppLayout breadcrumbs={breadcrumbs}>
        //     <Head title="Kontakt" />
        //     tuuuuuu
        //     <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
        //         <div className="grid auto-rows-min gap-4 md:grid-cols-3">
        //             <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video overflow-hidden rounded-xl border">
        //                 <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
        //                 něcoooooo
        //             </div>
        //             <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video overflow-hidden rounded-xl border">
        //                 <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
        //             </div>
        //             <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video overflow-hidden rounded-xl border">
        //                 <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
        //             </div>
        //         </div>
        //         <div className="border-sidebar-border/70 dark:border-sidebar-border relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border md:min-h-min">
        //             <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
        //         </div>
        //     </div>
        // </AppLayout>
    );
}
