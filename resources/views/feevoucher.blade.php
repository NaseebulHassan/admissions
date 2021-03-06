<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<title>IUIC FEE VOUCHER</title>
</head>

<body>
    <div class="container col-md-12">

        <table cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" bordercolor="#000000">
              <tbody>
                <tr bordercolor="#FFFFFF">
                  <td width="44%">Account's Copy</td>
                  <td width="56%"><div align="right"><img border="0" src="{{asset('images/header.gif')}}" width="244" height="54" /></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#C0C0C0"><strong>Students</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Application Form Code</td>
                  <td>{{$basicinfos->formno}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Applicant Name</td>
                  <td>{{$basicinfos->student_name}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Father's Name:</td>
                  <td>{{$basicinfos->father_name}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Voucher #</td>
                  <td><strong>ORS {{$vouchers->vchno}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF" bgcolor="#003366">
                <td colspan="2" bgcolor="#C0C0C0"><strong>Programme Applied</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                  <td> Program</td>
                  <td>{{$programs->studentprogram->code}}</td>    
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td>  Date</td>
                  <td><strong>{{$basicinfos->created_at}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Semester</td>
                  <td><strong>{{$programs->semesters->session}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"><table width="100%" border="1" bordercolor="#000000">
                    <tbody>
                      <tr>
                        <td colspan="2" bgcolor="#C0C0C0"><strong>Fees</strong></td>
                      </tr>
                      <tr>
                        <td width="63%">Application Processing Fee</td>
                        <td width="37%"><div align="right"><strong>{{$programs->studentprogram->process_fee}}</strong></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" bgcolor="#C0C0C0"><div align="right"><strong> Payable till :</strong>{{$programs->semesters->payable_date}}</div></td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2" bordercolor="#FF0000" bgcolor="#CCCCCC"><p align="center"><strong>You can deposit your fee at the Cash Counter in any Bank mentioned below or you can deposit your fee online into following banks</strong></p>
                        <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                          <tbody>
                            <tr>
                              <td><div align="center"><strong>Askari Bank<br />
                                I-9 Branch ISB 00551650500822</strong></div></td>
                              <td><div align="center"><strong>Habib Bank<br />
                                I-9 Branch ISB 02967900720052</strong></div></td>
                              <td><div align="center"><strong>Meezan Bank<br />
                                I-9 Branch ISB 030243500000013</strong></div></td>
                            </tr>
                          </tbody>
                        </table>
                    <p align="center"><strong>Please whatsapp a snapshot of deposit slip @ 03215264264 or send it through email @ admissions@iqraisb.edu.pk for updation of fee records in the system.</strong></p></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"><u> Special Instructions for authorised branches:</u></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"> In Bank Statement Applicant Form Code Should be quoted against Credit</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"> </td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td height="70"><p align="center">_________________<br />
                    Bank</p></td>
                  <td></td>
                </tr>
              </tbody>
            </table></td>
            <td> </td>
            <td>
            <table width="100%" border="0" bordercolor="#000000">
            <tbody>
                <tr bordercolor="#FFFFFF">
                  <td width="44%">Account's Copy</td>
                  <td width="56%"><div align="right"><img border="0" src="{{asset('images/header.gif')}}" width="244" height="54" /></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#C0C0C0"><strong>Students</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Application Form Code</td>
                  <td>{{$basicinfos->formno}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Applicant Name</td>
                  <td>{{$basicinfos->student_name}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Father's Name:</td>
                  <td>{{$basicinfos->father_name}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Voucher #</td>
                  <td><strong> ORS {{$vouchers->vchno}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF" bgcolor="#003366">
                <td colspan="2" bgcolor="#C0C0C0"><strong>Programme Applied</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                  <td> Program</td>
                  <td>{{$programs->studentprogram->code}}</td>    
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td>  Date</td>
                  <td><strong>{{$basicinfos->created_at}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Semester</td>
                  <td><strong>{{$programs->semester}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"><table width="100%" border="1" bordercolor="#000000">
                    <tbody>
                      <tr>
                        <td colspan="2" bgcolor="#C0C0C0"><strong>Fees</strong></td>
                      </tr>
                      <tr>
                        <td width="63%">Application Processing Fee</td>
                        <td width="37%"><div align="right"><strong>{{$programs->studentprogram->process_fee}}</strong></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" bgcolor="#C0C0C0"><div align="right"><strong> Payable till :</strong>{{$programs->semesters->payable_date}}</div></td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2" bordercolor="#FF0000" bgcolor="#CCCCCC"><p align="center"><strong>You can deposit your fee at the Cash Counter in any Bank mentioned below or you can deposit your fee online into following banks</strong></p>
                        <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                          <tbody>
                            <tr>
                              <td><div align="center"><strong>Askari Bank<br />
                                I-9 Branch ISB 00551650500822</strong></div></td>
                              <td><div align="center"><strong>Habib Bank<br />
                                I-9 Branch ISB 02967900720052</strong></div></td>
                              <td><div align="center"><strong>Meezan Bank<br />
                                I-9 Branch ISB 030243500000013</strong></div></td>
                            </tr>
                          </tbody>
                        </table>
                    <p align="center"><strong>Please whatsapp a snapshot of deposit slip @ 03215264264 or send it through email @ admissions@iqraisb.edu.pk for updation of fee records in the system.</strong></p></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"><u> Special Instructions for authorised branches:</u></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"> In Bank Statement Applicant Form Code Should be quoted against Credit</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"> </td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td height="70"><p align="center">_________________<br />
                    Bank</p></td>
                  <td></td>
                </tr>
              </tbody>
            </table></td>
            <td> </td>
            <td><table width="100%" border="0" bordercolor="#000000">
            <tbody>
                <tr bordercolor="#FFFFFF">
                  <td width="44%">Account's Copy</td>
                  <td width="56%"><div align="right"><img border="0" src="{{asset('images/header.gif')}}" width="244" height="54" /></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#C0C0C0"><strong>Students</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Application Form Code</td>
                  <td>{{$basicinfos->formno}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Applicant Name</td>
                  <td>{{$basicinfos->student_name}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Father's Name:</td>
                  <td>{{$basicinfos->father_name}}</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Voucher #</td>
                  <td><strong>ORS {{$vouchers->vchno}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF" bgcolor="#003366">
                <td colspan="2" bgcolor="#C0C0C0"><strong>Programme Applied</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                  <td> Program</td>
                  <td>{{$programs->studentprogram->code}}</td>    
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td>  Date</td>
                  <td><strong>{{$basicinfos->created_at}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td> Semester</td>
                  <td><strong>{{$programs->semester}}</strong></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"><table width="100%" border="1" bordercolor="#000000">
                    <tbody>
                      <tr>
                        <td colspan="2" bgcolor="#C0C0C0"><strong>Fees</strong></td>
                      </tr>
                      <tr>
                        <td width="63%">Application Processing Fee</td>
                        <td width="37%"><div align="right"><strong>{{$programs->studentprogram->process_fee}}</strong></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" bgcolor="#C0C0C0"><div align="right"><strong> Payable till :</strong>{{$programs->semesters->payable_date}}</div></td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2" bordercolor="#FF0000" bgcolor="#CCCCCC"><p align="center"><strong>You can deposit your fee at the Cash Counter in any Bank mentioned below or you can deposit your fee online into following banks</strong></p>
                        <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                          <tbody>
                            <tr>
                              <td><div align="center"><strong>Askari Bank<br />
                                I-9 Branch ISB 00551650500822</strong></div></td>
                              <td><div align="center"><strong>Habib Bank<br />
                                I-9 Branch ISB 02967900720052</strong></div></td>
                              <td><div align="center"><strong>Meezan Bank<br />
                                I-9 Branch ISB 030243500000013</strong></div></td>
                            </tr>
                          </tbody>
                        </table>
                    <p align="center"><strong>Please whatsapp a snapshot of deposit slip @ 03215264264 or send it through email @ admissions@iqraisb.edu.pk for updation of fee records in the system.</strong></p></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"><u> Special Instructions for authorised branches:</u></td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"> In Bank Statement Applicant Form Code Should be quoted against Credit</td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td colspan="2"> </td>
                </tr>
                <tr bordercolor="#FFFFFF">
                  <td height="70"><p align="center">_________________<br />
                    Bank</p></td>
                  <td></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </table>
    </div>
</body>
</html>
