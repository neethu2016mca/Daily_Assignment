import { TestBed } from '@angular/core/testing';

import { FirstsService } from './firsts.service';

describe('FirstsService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: FirstsService = TestBed.get(FirstsService);
    expect(service).toBeTruthy();
  });
});
