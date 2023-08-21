import Exercise from './Exercise'

interface Workout {
    id: number
    label: string
    user_id: number
    exercises: Array<Exercise>
}

export default Workout
