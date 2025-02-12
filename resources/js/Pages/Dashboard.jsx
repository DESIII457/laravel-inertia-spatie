// Mengimpor komponen AuthenticatedLayout untuk memastikan halaman hanya bisa diakses oleh pengguna yang sudah login.
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

// Mengimpor komponen Head dari Inertia.js untuk mengatur judul halaman di bagian <head>.
import { Head } from '@inertiajs/react';

// Mendefinisikan komponen Dashboard sebagai fungsi.
export default function Dashboard() {
    return (
        // Menggunakan layout AuthenticatedLayout untuk membungkus konten dashboard.
        <AuthenticatedLayout
            header={
                // Menetapkan header dengan teks "Dashboard".
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            {/* Menyetel judul halaman sebagai "Dashboard" menggunakan Inertia.js */}
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {/* Membuat container dengan background putih, bayangan, dan sudut membulat */}
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            {/* Menampilkan pesan bahwa pengguna sudah login */}
                            You're logged in!
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
