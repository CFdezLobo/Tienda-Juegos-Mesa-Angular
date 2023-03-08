import { TestBed } from '@angular/core/testing';

import { ServicioJuegosService } from './servicio-juegos.service';

describe('ServicioJuegosService', () => {
  let service: ServicioJuegosService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ServicioJuegosService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
