import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import {Head} from '@inertiajs/react'
import * as Types from '@/types'
import {Layouts, Tables} from '@/Components'

interface DashboardProps {
    auth: {
        user: Types.User
    },
    workouts: Array<Types.Workout>
}

export default function Dashboard({auth, workouts}: DashboardProps) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard"/>

            <Layouts.Container>
                <h1 className="mb-2 mt-0 text-5xl font-medium leading-tight text-white">
                    Workouts
                </h1>

                <Tables.Table className={''}>
                    <Tables.Thead>
                        <tr>
                            <th scope={'col'} className={'px-6 py-4'}>#</th>
                            <th scope={'col'} className={'px-6 py-4'}>Label</th>
                        </tr>
                    </Tables.Thead>
                </Tables.Table>

                <div className="flex flex-col text-white">
                    <div className="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div className="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div className="overflow-hidden">
                                <table className="min-w-full text-left text-sm font-light">
                                    <thead className="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" className="px-6 py-4">#</th>
                                        <th scope="col" className="px-6 py-4">Label</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {
                                        workouts.map((workout) => {
                                            return (
                                                <tr key={workout.id}
                                                    className="border-b dark:border-neutral-500">
                                                    <td className="whitespace-nowrap px-6 py-4 font-medium">{workout.id}</td>
                                                    <td className="whitespace-nowrap px-6 py-4">{workout.label}</td>
                                                    <td className="whitespace-nowrap px-6 py-4">
                                                        <div className={'flex'}>
                                                            {
                                                                workout.exercises.map((exercise: any) => {
                                                                    console.log(exercise)
                                                                    return (
                                                                        <p key={exercise.id} className={'ml-1'}>
                                                                                    <span
                                                                                        className={'font-bold'}>{exercise.details.length}x</span> {exercise.exercise.label},
                                                                        </p>
                                                                    )
                                                                })
                                                            }
                                                        </div>
                                                    </td>
                                                </tr>
                                            )
                                        })
                                    }
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </Layouts.Container>
        </AuthenticatedLayout>
    )
}
