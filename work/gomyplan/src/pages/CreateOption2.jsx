import styled from "styled-components";

// react-bootstrap
import Accordion from "react-bootstrap/Accordion";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";
import Table from "react-bootstrap/Table";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import InputTitle from "../components/InputTitle";
import Input from "../components/Input";
import Select from "../components/Select";
import BigButton from "../components/BigButton";
import CustomCalendar2 from "../components/CustomCalendar2";

// style
const FormBox = styled.div`
  gap: 25px;

  .accordion {
    box-shadow: 0 0 4px 0 rgba(0, 74, 123, 0.4);
    background: var(--color-white);
    border-radius: 10px;
    overflow: hidden;
  }

  .accordion-header {
    margin-bottom: 0;
  }

  .accordion-button {
    transition: var(--bs-accordion-transition);
    margin-bottom: 0;
    padding: 0 20px;
    height: 40px;
    color: var(--color-darkgray);
  }

  .accordion-button:not(.collapsed) {
    background: var(--color-default);
  }

  .accordion-button:not(.collapsed) div {
    transition: var(--bs-accordion-transition);
    color: var(--color-white);
  }

  .accordion-button:not(.collapsed)::after {
    filter: brightness(10);
  }

  .accordion-collapse {
    border-radius: 0;
  }

  .accordion-body {
    border: none;
    border-radius: 0;
    height: auto;
    padding: 20px 14px 24px;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .darkMode & .accordion {
    background: var(--color-darkgray2);
  }

  .darkMode & .accordion-button,
  .darkMode & .accordion-button * {
    color: var(--color-border);
  }
`;

const DateSelectBox = styled.div`
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 0 10px;

  .form-check {
    flex-direction: column;
  }

  .form-check.check_ver .form-check-label {
    font-size: 12px;
    text-align: center;
    color: var(--color-gray);
  }

  .form-check.check_ver .form-check-input:checked + .form-check-label {
    color: var(--color-black);
  }

  .darkMode & .form-check.check_ver .form-check-input:checked + .form-check-label {
    color: var(--color-bg2);
  }
`;

const EnterBox = styled.div`
  display: flex;
  align-items: center;
  gap: 10px;

  .input-group {
    gap: 8px;
  }
`;

const InputTitleSmall = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-darkgray);
  display: flex;
  align-items: center;
  gap: 4px;
  transition: var(--transition);

  span {
    font-weight: 400;
    font-size: 12px;
  }

  .darkMode & {
    color: var(--color-border);
  }
`;

const RateBox = styled.div`
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 10px;

  select {
    width: calc((100% - 130px) / 2);
    padding-right: calc(16px + 20px + 6px);
  }

  button {
    flex: 1;
    width: 100%;
    max-width: 130px;
  }

  .bmuLxO:not(.pc_ver) {
    height: 40px;
    border-radius: 10px;
  }

  @media screen and (max-width: 320px) {
    select {
      width: calc((100% - 105px) / 2);
      padding-right: calc(12px + 18px + 6px);
    }

    button {
      max-width: 85px;
    }
  }
`;

const CreateOption2 = () => {
  return (
    <>
      {/* Header */}
      <Header type="title2" title="‘Walking Around Hong..." />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <FormBox className="formbox">
            <Form.Group className="formitem">
              <Accordion defaultActiveKey="0">
                <Accordion.Item eventKey="0">
                  <Accordion.Header>
                    <InputTitle className="input_title">Enter Fare</InputTitle>
                  </Accordion.Header>
                  <Accordion.Body>
                    <DateSelectBox>
                      <Form.Check type="radio" name="Week" id="Sun" label="Sun" className="check_ver" />
                      <Form.Check type="radio" name="Week" id="Mon" label="Mon" className="check_ver" />
                      <Form.Check type="radio" name="Week" id="Tue" label="Tue" className="check_ver" />
                      <Form.Check type="radio" name="Week" id="Wed" label="Wed" className="check_ver" />
                      <Form.Check type="radio" name="Week" id="Thu" label="Thu" className="check_ver" />
                      <Form.Check type="radio" name="Week" id="Fri" label="Fri" className="check_ver" />
                      <Form.Check type="radio" name="Week" id="Sat" label="Sat" className="check_ver" />
                    </DateSelectBox>
                    <EnterBox>
                      <CustomCalendar2 placeholder="From...." />
                      <CustomCalendar2 placeholder="To...." />
                    </EnterBox>
                    <EnterBox>
                      <InputGroup>
                        <InputTitleSmall>Adult</InputTitleSmall>
                        <Input placeholder="USD $" type="text" />
                      </InputGroup>
                      <InputGroup>
                        <InputTitleSmall>
                          Child <span>(under 12)</span>
                        </InputTitleSmall>
                        <Input placeholder="USD $" type="text" />
                      </InputGroup>
                    </EnterBox>
                  </Accordion.Body>
                </Accordion.Item>
              </Accordion>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Rate Search</InputTitle>
              <RateBox>
                <Select>
                  <option value="">2023</option>
                </Select>
                <Select>
                  <option value="">01</option>
                </Select>
                <BigButton>Search</BigButton>
              </RateBox>
              <Table bordered>
                <thead>
                  <tr>
                    <th className="th-date">Date</th>
                    <th className="th-day">Day</th>
                    <th className="th-adult">Adult</th>
                    <th className="th-child">Child</th>
                    <th className="th-close">Close Out</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td className="th-date">2023-06-01</td>
                    <td className="th-day">Thu</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check1" id="check1" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date">2023-06-02</td>
                    <td className="th-day">Fri</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check2" id="check2" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date sat">2023-06-03</td>
                    <td className="th-day sat">Sat</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check3" id="check3" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date sun">2023-06-04</td>
                    <td className="th-day sun">Sun</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check4" id="check4" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date">2023-06-05</td>
                    <td className="th-day">Mon</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check5" id="check5" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date">2023-06-06</td>
                    <td className="th-day">Tue</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check6" id="check6" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date">2023-06-07</td>
                    <td className="th-day">Wed</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check7" id="check7" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date">2023-06-08</td>
                    <td className="th-day">Thu</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check8" id="check8" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date">2023-06-09</td>
                    <td className="th-day">Fri</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check9" id="check9" label="" className="check_ver" />
                    </td>
                  </tr>
                  <tr>
                    <td className="th-date sat">2023-06-10</td>
                    <td className="th-day sat">Sat</td>
                    <td className="th-adult">$38</td>
                    <td className="th-child">$38</td>
                    <td className="th-close">
                      <Form.Check type="checkbox" name="check10" id="check10" label="" className="check_ver" />
                    </td>
                  </tr>
                </tbody>
              </Table>
            </Form.Group>
          </FormBox>
        </PageContent>
        <PageBtnbox>
          <BigButton>Confirm</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default CreateOption2;
