import React, {ReactNode} from 'react'

type ContainerProps = {
    /** Children of Container */
    children: ReactNode
}

export default function Container({children}: ContainerProps) {
    return (
        <div className={'py-12'}>
            <div className={'max-w-7xl mx-auto sm:px-6 lg:px-8'}>
                <div className={'bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4'}>
                    {children}
                </div>
            </div>
        </div>
    )
}
