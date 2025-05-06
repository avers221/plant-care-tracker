export interface Directory {
    id: number;
    name: string;
    $description: string;
}

export interface DirectoriesDTO {
    applicationMethod: Array<Directory>;
    fertilizerType: Array<Directory>;
    lightType: Array<Director>y;
    placement: Array<Directory>;
    repottingFrequency: Array<Directory>;
    specialRepottingRequirements: Array<Directory>;
    wateringMethod: Array<Directory>;
    whenToPrune: Array<Directory>;
}
