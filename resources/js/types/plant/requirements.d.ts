export interface Requirement {
    id: string;
    plant_id: string;

    watering_requirement: WateringRequirement
}

export interface WateringRequirement {
    id: number;
    frequency_days: number;
    amount_ml: number;
    watering_method_id: number;
    notes: string;
}
