export const translate = (lang, value) => {
  return dictionary[value] ? dictionary[value][lang] : undefined;
};

export const revert = (value) =>
  Object.entries(dictionary).reduce((reducer, [k, { sk, en }]) => {
    if (sk === value || en === value) {
      reducer = k;
    }

    return reducer;
  }, undefined);

export const radToDeg = (rad) => rad * 57.2957795;

export const experimentColors = {
  carShockAbsorber: '#FFC733',
};

export const dictionary = {
  carShockAbsorber: {
    sk: 'Tlmič kolesa',
    en: 'Car shock absorber',
  }
};

export default {
  carShockAbsorber: {
    svg: './assets/svg/car.svg',
    layers: {
      body: '#car-body',
      wheel: '#wheel',
    },
    labels: {
      sk: ['Výška kolesa', 'Výška auta'],
      en: ['Wheel height', 'Car height'],
    },
    endpoint: 'suspension',
    octaveData: {
      x: (value) => value,
      y: (value) => value,
      bodyworkHeight: (value) => value,
    },
    regex: /^-?([0-9](\.\d{0,1})?$|^-?[1][0]{1})?$/m,
  },
};
