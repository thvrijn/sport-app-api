import React, {ReactNode} from 'react'

type TableProps = {
    /** Children of Table */
    children: ReactNode
}

export default function Table({children}: TableProps) {
    return (
        <table className={'min-w-full text-left text-sm font-light'}>
            {children}
        </table>
    )
}
