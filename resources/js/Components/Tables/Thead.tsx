import React, {ReactNode} from 'react'

type TableProps = {
    /** Children of Table */
    children: ReactNode
}

export default function Table({children}: TableProps) {
    return (
        <thead className={'border-b font-medium dark:border-neutral-500'}>
            {children}
        </thead>
    )
}
